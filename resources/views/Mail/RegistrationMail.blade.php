@component('mail::message')
<h2>Dear {{ $mail_data['name'] }},</h2>

Your registration of {{ $mail_data['property'] }} was {{ $mail_data['status'] }}.

<br>
<h2>Sincerely,</h2>
<p>SMDC</p>
@endcomponent