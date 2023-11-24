<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequestFormRequest; // Use a distinct name for the request class
use App\Http\Requests\BookRequestForm;
use App\User;
use Illuminate\Http\Request;
use App\Models\BookRequest;

class RequestController extends Controller
{


    public function index()
    {
        $bookRequests = BookRequest::all();
        return view('requests.index', compact('bookRequests'));
    }

    public function create()
    {
        return view('requests.create');
    }
    
    public function store(Request $request)
    {
        // Validate the request and store the data
        // You can use the BookRequestForm request class for validation
        // Example: $request->validate([...]);

        BookRequest::create($request->all());

        return redirect()->route('requests.index')->with('success', 'Book Request created successfully!');
    }

    public function edit(BookRequest $bookRequest)
    {
        return view('requests.edit', compact('bookRequest'));
    }

    public function update(Request $request, BookRequest $bookRequest)
    {
        // Validate the request and update the data
        // Example: $request->validate([...]);

        $bookRequest->update($request->all());

        return redirect()->route('requests.index')->with('success', 'Book Request updated successfully!');
    }
}
