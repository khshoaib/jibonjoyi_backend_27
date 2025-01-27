<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Storage;

class StoryController extends Controller
{
    public function edit($id)
    {
        $story = Story::findOrFail($id); // Fetch the story by ID
        return view('stories.edit', compact('story')); // Pass the story to the view
    }

    // Handle the update of the story
    public function update(Request $request, $id)
    {
        $story = Story::findOrFail($id); // Find the story by ID

        // Validate the incoming data
        $validated = $request->validate([
            'story_title' => 'required|string|max:255',
            'story_writer' => 'required|string|max:255',
            'story_date' => 'required|date',
            'story_description' => 'required|string',
            'story_category' => 'required|string|max:255', // Make sure this is required
            'story_rating' => 'required|numeric|min:0|max:5', // Rating should be numeric and within the range
            'story_details' => 'required|string', // Ensure story details is required
            'banner' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update the story data
        $story->update($validated);

        // Handle the file uploads if any
        if ($request->file('banner')) {
            // Delete the old banner image before uploading the new one
            if ($story->banner) {
                Storage::delete('public/' . $story->banner);
            }
            $story->banner = $request->file('banner')->store('banners', 'public');
        }

        if ($request->files('img')) {
            // Delete the old img before uploading the new one
            if ($story->img) {
                Storage::delete('public/' . $story->img);
            }
            $story->img = $request->file('img')->store('images', 'public');
        }

        $story->save(); // Save the story

        // Redirect with a success message
        return redirect()->route('stories.searchResults')->with('success', 'Story updated successfully!');
    }

    //delete
    public function destroy($id)
    {
        $story = Story::findOrFail($id); // Find the story by ID

        // Delete associated images if they exist
        if ($story->banner) {
            Storage::delete('public/' . $story->banner);
        }
        if ($story->img) {
            Storage::delete('public/' . $story->img);
        }

        // Delete the story from the database
        $story->delete();

        // Redirect back to the search results with a success message
        return redirect()->route('stories.searchResults')->with('success', 'Story deleted successfully!');
    }


    //search
    public function searchForm()
    {
        return view('stories.search'); // Return the search page
    }

    // Handle search and show results
    public function searchResults(Request $request)
    {
        // Validate search input
        $request->validate([
            'story_title' => 'nullable|string|max:255', // Title is optional
        ]);

        // Fetch stories based on search title
        $stories = Story::query();

        if ($request->filled('story_title')) {
            $stories = $stories->where('story_title', 'like', '%' . $request->story_title . '%');
        }

        $stories = $stories->get(); // Get all the matched stories

        return view('stories.search_results', compact('stories')); // Pass results to the view
    }
    public function create()
    {
        return view('stories.create'); // Render form view
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'story_title' => 'required|string|max:255',
            'story_writer' => 'required|string|max:255',
            'story_date' => 'required|date',
            'story_description' => 'required|string',
            'story_category' => 'required|string|max:255',
            'story_category1' => 'required|string|max:255',
            'story_rating' => 'required|numeric|min:0|max:5',
            'story_details' => 'required|string',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'img' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'img1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'img2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'img3' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $story = new Story($validated);

        // Handle image uploads
        if ($request->hasFile('banner')) {
            $story->banner = $request->file('banner')->storeAs('banners', $request->file('banner')->getClientOriginalName(), 'public');
        }
        
        // For img
        if ($request->hasFile('img')) {
            $story->img = $request->file('img')->storeAs('images', $request->file('img')->getClientOriginalName(), 'public');
        }
        
        // For img1
        if ($request->hasFile('img1')) {
            $story->img1 = $request->file('img1')->storeAs('images', $request->file('img1')->getClientOriginalName(), 'public');
        }
        
        // For img2
        if ($request->hasFile('img2')) {
            $story->img2 = $request->file('img2')->storeAs('images', $request->file('img2')->getClientOriginalName(), 'public');
        }
        
        // For img3
        if ($request->hasFile('img3')) {
            $story->img3 = $request->file('img3')->storeAs('images', $request->file('img3')->getClientOriginalName(), 'public');
        }

        $story->save();

        return redirect()->route('stories.create')->with('success', 'Story added successfully!');
    }

    public function incrementClickCount($storyId)
    {
        // Find the story by ID
        $story = Story::findOrFail($storyId);

        // Increment the click count by 1
        $story->increment('click_count');

        // Redirect to the story's details page
        return redirect()->route('jibonjoyi_details', ['id' => $storyId]);
    }

    public function showDetails($id)
    {
        // Fetch the story by ID
        $story = Story::findOrFail($id);

        // Return the view and pass the story data to it
        return view('jibonjoyi_details', compact('story'));
    }
    public function showStories()
    {
        // Fetch the last 6 stories across all categories

        $mostReadStories = Story::select([
            'id',
            'story_title',
            'banner',
            'story_writer',
            'writer_img',
            'story_category1',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->orderBy('click_count', 'desc') // Order by the newest stories
            ->take(6) // Limit to the last 6 stories
            ->get();

        $lastSixStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'মুক্তিযুদ্ধ')
            ->orderBy('story_date', 'desc') // Order by the newest stories
            ->take(6) // Limit to the last 6 stories
            ->get();

        $AllStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            // ->orderBy('story_date', 'desc') // Order by the newest stories
            // ->take(6) // Limit to the last 6 stories
            ->get();

        // Fetch top two stories where the category is "ইতিহাস"
        $historyStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'ইতিহাস') // Filter by the "ইতিহাস" category
            ->orderBy('story_date', 'desc') // Order by story_date in descending order (newest first)
            ->take(2) // Limit the result to only two stories
            ->get();

        // Fetch top two stories where the category is "দর্শন"
        $philosophyStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'দর্শন') // Filter by the "দর্শন" category
            ->orderBy('story_date', 'desc') // Order by story_date in descending order (newest first)
            ->take(2) // Limit the result to only two stories
            ->get();

        // Fetch top two stories where the category is "ধর্ম"
        $religionStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'ধর্ম') // Filter by the "ধর্ম" category
            ->orderBy('story_date', 'desc') // Order by story_date in descending order (newest first)
            ->take(2) // Limit the result to only two stories
            ->get();

        // Fetch top two stories where the category is "খেলাধুলা"
        $sportsStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'খেলাধুলা') // Filter by the "খেলাধুলা" category
            ->orderBy('story_date', 'desc') // Order by story_date in descending order (newest first)
            ->take(2) // Limit the result to only two stories
            ->get();

        // Fetch top two stories where the category is "ভ্রমণ"
        $travelStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'ভ্রমণ') // Filter by the "ভ্রমণ" category
            ->orderBy('story_date', 'desc') // Order by story_date in descending order (newest first)
            ->take(2) // Limit the result to only two stories
            ->get();

        // Fetch top two stories where the category is "মুক্তিযুদ্ধ"
        $liberationStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'মুক্তিযুদ্ধ') // Filter by the "মুক্তিযুদ্ধ" category
            ->orderBy('story_date', 'desc') // Order by story_date in descending order (newest first)
            ->take(2) // Limit the result to only two stories
            ->get();

        // Fetch top two stories where the category is "বিশ্ব"
        $worldStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'বিশ্ব') // Filter by the "বিশ্ব" category
            ->orderBy('story_date', 'desc') // Order by story_date in descending order (newest first)
            ->take(2) // Limit the result to only two stories
            ->get();

        // Fetch top two stories where the category is "অর্থনীতি"
        $economyStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'অর্থনীতি') // Filter by the "অর্থনীতি" category
            ->orderBy('story_date', 'desc') // Order by story_date in descending order (newest first)
            ->take(2) // Limit the result to only two stories
            ->get();

        // Fetch top two stories where the category is "রাজনীতি"
        $politicsStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'রাজনীতি') // Filter by the "রাজনীতি" category
            ->orderBy('story_date', 'desc') // Order by story_date in descending order (newest first)
            ->take(2) // Limit the result to only two stories
            ->get();

        // Fetch top two stories where the category is "বিজ্ঞান"
        $scienceStories = Story::select([
            'story_title',
            'banner',
            'story_writer',
            'story_date',
            'story_description',
            'story_category',
            'story_rating'
        ])
            ->where('story_category', 'বিজ্ঞান') // Filter by the "বিজ্ঞান" category
            ->orderBy('story_date', 'desc') // Order by story_date in descending order (newest first)
            ->take(2) // Limit the result to only two stories
            ->get();

        // Pass all categories' stories to the view
        return view('liberation', compact(
            'historyStories',
            'philosophyStories',
            'religionStories',
            'sportsStories',
            'travelStories',
            'liberationStories',
            'worldStories',
            'economyStories',
            'politicsStories',
            'scienceStories',
            'lastSixStories',
            'AllStories',
            'mostReadStories'
        ));
    }
}
