<x-layouts::admin :title="__('Add User')">
    <div class="max-w-2xl rounded-xl border border-zinc-200 p-6 dark:border-zinc-700">
        <form method="POST" action="/admin/users" class="flex flex-col gap-4">
            @csrf
            <flux:input name="name" :label="__('Name')" :value="old('name')" type="text" required />
            <flux:input name="email" :label="__('Email')" :value="old('email')" type="email" required />
            <flux:input name="password" :label="__('Password')" type="password" required description="{{ __('Minimum 8 characters.') }}" />
            <div class="flex gap-3 pt-2">
                <flux:button variant="primary" type="submit">{{ __('Create User') }}</flux:button>
                <flux:button variant="ghost" href="/admin/users">{{ __('Cancel') }}</flux:button>
            </div>
        </form>
    </div>
</x-layouts::admin>
