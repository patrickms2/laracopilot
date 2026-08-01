<x-layouts::admin :title="__('Edit User')">
    <div class="max-w-2xl rounded-xl border border-zinc-200 p-6 dark:border-zinc-700">
        <form method="POST" action="/admin/users/{{ $user->id }}" class="flex flex-col gap-4">
            @csrf
            @method('PUT')
            <flux:input name="name" :label="__('Name')" :value="old('name', $user->name)" type="text" required />
            <flux:input name="email" :label="__('Email')" :value="old('email', $user->email)" type="email" required />
            <flux:input name="password" :label="__('New Password')" type="password" description="{{ __('Leave blank to keep the current password.') }}" />
            <div class="flex gap-3 pt-2">
                <flux:button variant="primary" type="submit">{{ __('Save Changes') }}</flux:button>
                <flux:button variant="ghost" href="/admin/users">{{ __('Cancel') }}</flux:button>
            </div>
        </form>
    </div>
</x-layouts::admin>
