<?php

namespace App\Http\Controllers;

use App\Services\Contracts\AccountServiceInterface;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    protected $accountService;

    public function __construct(AccountServiceInterface $accountService)
    {
        $this->accountService = $accountService;
    }

    public function index(Request $request)
    {
        $perPage = $request->input('per_page', 50);
        $accounts = $this->accountService->indexAccount($perPage);

        return view('web.accounts.Index', compact('accounts'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|integer',
            'bank_name' => 'nullable|string',
            'number' => 'nullable|string',
            'agency' => 'nullable|string',
        ]);

        $account = $this->accountService->createAccount($data);

        return response()->json($account, 201);
    }

    public function update(Request $request, Account $account)
    {
        $data = $request->validate([
            'type' => 'sometimes|integer',
            'bank_name' => 'nullable|string',
            'number' => 'nullable|string',
            'agency' => 'nullable|string',
        ]);

        $updatedAccount = $this->accountService->updateAccount($account, $data);

        return response()->json($updatedAccount);
    }

    public function destroy(Account $account)
    {
        $this->accountService->deleteAccount($account);

        return response()->json(null, 204);
    }

    public function show(Account $account)
    {
        return response()->json([
            'account' => $account
        ]);
    }
}