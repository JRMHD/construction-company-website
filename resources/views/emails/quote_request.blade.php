@component('mail::message')
    # New Quote Request

    Hello Admin,

    You have received a new quote request. Here are the details:

    - **Name:** {{ $name }}
    - **Email:** {{ $email }}
    - **Phone:** {{ $phone }}
    - **Location:** {{ $location }}
    - **Project Description:** {{ $project }}
    - **Additional Information:** {{ $additional_info }}

    Please review the details and take necessary action.

    @component('mail::button', ['url' => url('/')])
        Go to Website
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
