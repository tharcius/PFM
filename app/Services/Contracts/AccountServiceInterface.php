<?php

namespace App\Services\Contracts;

use App\Models\Account;
use Illuminate\Pagination\LengthAwarePaginator;

interface AccountServiceInterface
{
    public function indexAccount(int $perPage = 50): LengthAwarePaginator;
    public function createAccount(array $data): Account;
    public function updateAccount(Account $account, array $data): Account;
    public function deleteAccount(Account $account): void;
}
