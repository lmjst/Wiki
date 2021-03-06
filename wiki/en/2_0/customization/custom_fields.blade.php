@extends('layouts.master')

@section('title')
    Custom Fields
@endsection

@section('content')

    <h2 class="page-title">Custom Fields</h2>

    <ul>
        <li><a href="#create-custom-field">How do I create a custom field?</a></li>
        <li><a href="#add-custom-field-to-invoice-or-quote">How do I make custom fields appear on my invoices or
                quotes?</a></li>
    </ul>

    <hr>

    <span class="anchor" id="create-custom-field"></span>
    <h3>How do I create a custom field?</h3>

    <p>Click the System menu and select Custom Fields.</p>

    <a href="/content/docs/2.0/custom_fields.png" target="_blank">
        <img src="/content/docs/2.0/custom_fields_small.png" class="img-responsive">
    </a>

    <p>Press the New button.</p>

    <a href="/content/docs/2.0/custom_fields2.png" target="_blank">
        <img src="/content/docs/2.0/custom_fields2_small.png" class="img-responsive">
    </a>

    <p>Use the Table Name field to choose the table to add the custom field to.</p>
    <p>Enter the label of the custom field in Field Label.</p>
    <p>Choose the type of the custom field in Field Type.</p>
    <p>If the Field Type is a dropdown, enter the list of dropdown values separated by commas in Field Meta. For
        example, if the Field Label is Color and
        the Field Type is dropdown, you might enter: White,Blue,Red,Green,Orange,Purple,Black. If the Field type
        is not dropdown, leave Field Meta empty.</p>
    <p>Press the Save button. Your custom field(s) will now appear on the appropriate edit screens.</p>

    <a href="/content/docs/2.0/custom_fields3.png" target="_blank">
        <img src="/content/docs/2.0/custom_fields3_small.png" class="img-responsive">
    </a>

    <hr>

    <span class="anchor" id="add-custom-field-to-invoice-or-quote"></span>
    <h3>How do I make custom fields appear on my invoices or quotes?</h3>

    <p>See <a href="{{ url('en/2.0/customization/invoice-templates#adding-custom-fields') }}">this section</a> in the Invoice Templates
        documentation.</p>

@endsection
