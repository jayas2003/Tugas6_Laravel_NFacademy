<?php
namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    // READ ALL (Hanya admin)
    public function index()
    {
        $transactions = Transaction::with(['user', 'product'])->get();
        return response()->json($transactions);
    }

    // SHOW (Hanya customer login)
    public function show($id)
    {
        $transaction = Transaction::with(['user', 'product'])->find($id);
        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }
        return response()->json($transaction);
    }

    // CREATE (Hanya customer login)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $transaction = Transaction::create([
            'user_id' => auth()->id(),
            'product_id' => $validated['product_id'],
            'quantity' => $validated['quantity'],
            'total_price' => $validated['quantity'] * 10000, // contoh kalkulasi
            'status' => 'pending',
        ]);

        return response()->json($transaction, 201);
    }

    // UPDATE (Hanya customer login)
    public function update(Request $request, $id)
    {
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $transaction->update($request->only('quantity', 'status'));
        return response()->json($transaction);
    }

    // DESTROY (Hanya admin)
    public function destroy($id)
    {
        $transaction = Transaction::find($id);
        if (!$transaction) {
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        $transaction->delete();
        return response()->json(['message' => 'Transaction deleted successfully']);
    }
}
