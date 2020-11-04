
@component('mail::message')
<center>
    <img src="https://autoceylonsrl.com/front-end/images/logo/site-logo.png" class="logo" alt="Auto Ceylon" style="margin-bottom: 10px">
</center>
<br>
Dettagli modulo di contatto

Email : {{ $form_data['email'] }} <br>
Telefono : {{ $form_data['telephone'] }} <br>
Indirizzo : {{ $form_data['address'] }} <br>
Messaggio : {{ $form_data['message'] }} <br>
@if(isset($form_data['url']))
@component('mail::button',['url' => $form_data['url']])
{{ __('Visualizza veicolo') }}
@endcomponent
@endif

Thanks,<br>
{{ "autoceylonsrl" }}
@endcomponent
