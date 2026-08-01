<x-layouts::admin :title="__('Users')">
    <div class="flex justify-end mb-4">
        <flux:button variant="primary" href="/admin/users/create" icon="plus">{{ __('Add User') }}</flux:button>
    </div>

    <div class="overflow-x-auto rounded-xl border border-zinc-200 dark:border-zinc-700">
        <table class="w-full text-sm">
            <thead class="bg-zinc-50 text-left text-zinc-500 dark:bg-zinc-900 dark:text-zinc-400">
                <tr>
                    <th class="px-5 py-3 font-medium">{{ __('Name') }}</th>
                    <th class="px-5 py-3 font-medium">{{ __('Email') }}</th>
                    <th class="px-5 py-3 font-medium">{{ __('Joined') }}</th>
                    <th class="px-5 py-3 font-medium text-right">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-zinc-100 dark:divide-zinc-800">
                @forelse ($users as $user)
                    <tr>
                        <td class="px-5 py-3 font-medium">{{ $user->name }}</td>
                        <td class="px-5 py-3">{{ $user->email }}</td>
                        <td class="px-5 py-3">{{ optional($user->created_at)->format('M j, Y') ?? '—' }}</td>
                        <td class="px-5 py-3">
                            <div class="flex justify-end gap-2">
                                <flux:button size="sm" variant="ghost" href="/admin/users/{{ $user->id }}/edit">{{ __('Edit') }}</flux:button>
                                <form method="POST" action="/admin/users/{{ $user->id }}" onsubmit="return confirm('Delete {{ $user->name }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <flux:button size="sm" variant="ghost" type="submit" class="text-red-600">{{ __('Delete') }}</flux:button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-5 py-8 text-center text-zinc-400">{{ __('No users yet.') }}</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-layouts::admin>
