@component('mail::message')
<h2>Dear {{ $mail_data['name'] }},</h2>

Your viewing request of {{ $mail_data['property'] }}, scheduled on {{ $mail_data['date'] }} at {{ $mail_data['time'] }} was {{ $mail_data['status'] }}.

<br>
<h2>Sincerely,</h2>
<p>SMDC</p>
@endcomponent