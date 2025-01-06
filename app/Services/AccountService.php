<?php

namespace App\Services;

use App\Models\Account;
use App\Services\Contracts\AccountServiceInterface;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

class AccountService implements AccountServiceInterface
{
    /**
     * Cria uma nova conta.
     *
     * @param array $data
     * @return Account
     */
    public function indexAccount(int $perPage = 50): LengthAwarePaginator
    {
        return Account::paginate($perPage);
    }

    /**
     * Cria uma nova conta.
     *
     * @param array $data
     * @return Account
     */
    public function createAccount(array $data): Account
    {
        return DB::transaction(function () use ($data) {
            return Account::create($data);
        });
    }

    /**
     * Atualiza uma conta existente.
     *
     * @param Account $account
     * @param array $data
     * @return Account
     */
    public function updateAccount(Account $account, array $data): Account
    {
        return DB::transaction(function () use ($account, $data) {
            $account->update($data);
            return $account;
        });
    }

    /**
     * Exclui uma conta.
     *
     * @param Account $account
     * @return void
     */
    public function deleteAccount(Account $account): void
    {
        DB::transaction(function () use ($account) {
            $account->delete();
        });
    }
}
