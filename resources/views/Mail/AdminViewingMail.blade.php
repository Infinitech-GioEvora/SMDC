@component('mail::message')
<h1>Viewing Request</h1>
<p>{{ $mail_data['name'] }} has requested a viewing of {{ $mail_data['property'] }} on {{ $mail_data['date'] }} at {{ $mail_data['time'] }}.</p> <br>

<h1>Message</h1>
<p>{{ $mail_data['msg'] }}</p>

<div style="display:flex;">
@component('mail::button', ['url' => "http://127.0.0.1:8000/admin/viewings/change/".$mail_data['id']."/Accept", 'color' => 'green'])
Accept
@endcomponent

@component('mail::button', ['url' => "http://127.0.0.1:8000/admin/viewings/change/".$mail_data['id']."/Decline", 'color' => 'red'])
Decline
@endcomponent
</div>

@endcomponent