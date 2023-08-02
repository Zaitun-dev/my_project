<tr x-data="{ modalIsOpen : false }">
    <td class="">{{ $contact->name }}</td>
    <td class="">{{ $contact->email }}</td>
    <td class="">{{ $contact->subject }}</td>
    <td class="">{{ $contact->message }}</td>
    
    @if(getCrudConfig('Contact')->delete or getCrudConfig('Contact')->update)
        <td>

            @if(getCrudConfig('Contact')->update && hasPermission(getRouteName().'.contact.update', 0, 0, $contact))
                <a href="@route(getRouteName().'.contact.update', $contact->id)" class="btn text-primary mt-1">
                    <i class="icon-pencil"></i>
                </a>
            @endif

            @if(getCrudConfig('Contact')->delete && hasPermission(getRouteName().'.contact.delete', 0, 0, $contact))
                <button @click.prevent="modalIsOpen = true" class="btn text-danger mt-1">
                    <i class="icon-trash"></i>
                </button>
                <div x-show="modalIsOpen" class="cs-modal animate__animated animate__fadeIn">
                    <div class="bg-white shadow rounded p-5" @click.away="modalIsOpen = false" >
                        <h5 class="pb-2 border-bottom">{{ __('DeleteTitle', ['name' => __('Contact') ]) }}</h5>
                        <p>{{ __('DeleteMessage', ['name' => __('Contact') ]) }}</p>
                        <div class="mt-5 d-flex justify-content-between">
                            <a wire:click.prevent="delete" class="text-white btn btn-success shadow">{{ __('Yes, Delete it.') }}</a>
                            <a @click.prevent="modalIsOpen = false" class="text-white btn btn-danger shadow">{{ __('No, Cancel it.') }}</a>
                        </div>
                    </div>
                </div>
            @endif
        </td>
    @endif
</tr>
