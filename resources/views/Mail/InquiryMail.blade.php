@component('mail::message')
<h1>SMDC Inquiry</h1>

Name: {{ $mail_data['name'] }}<br>
Phone: {{ $mail_data['phone'] }}<br>
Email: {{ $mail_data['email'] }}<br>

Message: {{ $mail_data['msg'] }}

@endcomponent