@foreach ($accounts->items() as $account)
    <div>
        <h3> 
            {{$account->name}} - {{$account->account_type_label}}
        </h3>
        @if($account->type !== 1)
            <p>{{ $account->bank_name }}</p>
            <p>{{ $account->number }}</p>
            <p>{{ $account->agency }}</p>
            <p>{{ $account->description }}</p>
        @endif
    </div>
@endforeach

{{ $accounts->links() }}