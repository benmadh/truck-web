@component('mail::message')

Dettagli modulo di contatto

Email    :  {{ $form_data['email'] }} <br>
Telefono :  {{ $form_data['telephone'] }} <br>
Indirizzo : {{ $form_data['address'] }} <br>
Messaggio : {{ $form_data['message'] }} <br>

Thanks,<br>
{{ "autoceylonsrl" }}
@endcomponent
