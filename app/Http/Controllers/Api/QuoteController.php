<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\QuoteResources;
use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        $quotes = Quote::latest()->paginate(10);

        return QuoteResources::collection($quotes);
    }

    public function show($id)
    {
        $quote = Quote::find($id);

        return new QuoteResources($quote);
    }

    public function update(Request $request, Quote $quote)
    {
        $this->authorize('update', $quote);

        $quote->update([
            'message' => $request->message
        ]);

        return new QuoteResources($quote);
    }

    public function destroy(Quote $quote)
    {
        $this->authorize('delete', $quote);

        $quote->delete();

        return response()->json([
            'message' => 'Quote deleted',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required'
        ]);

        $quote = Quote::create([
            'user_id' => auth()->id(),
            'message' => $request->message,
        ]);

        return new QuoteResources($quote);
    }
}
