<div class="card">
    <div class="card-header p-0">
        <h3 class="card-title">{{ __('UpdateTitle', ['name' => __('Appointment') ]) }}</h3>
        <div class="px-2 mt-4">
            <ul class="breadcrumb mt-3 py-3 px-4 rounded">
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.home')" class="text-decoration-none">{{ __('Dashboard') }}</a></li>
                <li class="breadcrumb-item"><a href="@route(getRouteName().'.appointment.read')" class="text-decoration-none">{{ __(\Illuminate\Support\Str::plural('Appointment')) }}</a></li>
                <li class="breadcrumb-item active">{{ __('Update') }}</li>
            </ul>
        </div>
    </div>

    <form class="form-horizontal" wire:submit.prevent="update" enctype="multipart/form-data">

        <div class="card-body">

                        <!-- Name Input -->
            <div class='form-group'>
                <label for='input-name' class='col-sm-2 control-label '> {{ __('Name') }}</label>
                <input type='text' id='input-name' wire:model.lazy='name' class="form-control  @error('name') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('name') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Email Input -->
            <div class='form-group'>
                <label for='input-email' class='col-sm-2 control-label '> {{ __('Email') }}</label>
                <input type='email' id='input-email' wire:model.lazy='email' class="form-control  @error('email') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('email') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Appointment_date Input -->
            <div class='form-group'>
                <label for='input-appointment_date' class='col-sm-2 control-label '> {{ __('Appointment_date') }}</label>
                <input type='date' id='input-appointment_date' wire:model.lazy='appointment_date' class="form-control  @error('appointment_date') is-invalid @enderror" autocomplete='on'>
                @error('appointment_date') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Departement Input -->
            <div class='form-group'>
                <label for='input-departement' class='col-sm-2 control-label '> {{ __('Departement') }}</label>
                <input type='text' id='input-departement' wire:model.lazy='departement' class="form-control  @error('departement') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('departement') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Contact Input -->
            <div class='form-group'>
                <label for='input-contact' class='col-sm-2 control-label '> {{ __('Contact') }}</label>
                <input type='text' id='input-contact' wire:model.lazy='contact' class="form-control  @error('contact') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('contact') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>
            <!-- Message Input -->
            <div class='form-group'>
                <label for='input-message' class='col-sm-2 control-label '> {{ __('Message') }}</label>
                <input type='text' id='input-message' wire:model.lazy='message' class="form-control  @error('message') is-invalid @enderror" placeholder='' autocomplete='on'>
                @error('message') <div class='invalid-feedback'>{{ $message }}</div> @enderror
            </div>


        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-info ml-4">{{ __('Update') }}</button>
            <a href="@route(getRouteName().'.appointment.read')" class="btn btn-default float-left">{{ __('Cancel') }}</a>
        </div>
    </form>
</div>
