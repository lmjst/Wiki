@extends('layouts.master')

@section('content')

<h2 class="page-title">Changelog</h2>

<div class="changelog">

    <div class="alert alert-info">Click on an older version to show the detailed changelog.</div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v120">
            v1.2.0 <span class="released">released 01/27/2015</span>
        </div>
        <div id="v120" class="panel-body collapse in">
            <p>New Features</p>
            <ul>
                <li>Items are replaced by products with full category (family) and purchase price support</li>
                <li>Support for credit invoices added</li>
                <li>Invoices can now only be deleted under certain circumstances</li>
                <li>Ability to set a period for quote / invoice overviews on dashboard</li>
                <li>Ability to choose a default country for clients</li>
                <li>Sidebar is now disabled by default, you can enable it in the settings</li>
                <li>Ability to choose an own title for the browser window</li>
                <li>InvoicePlane sends a mail to the administrator if a quote was rejected / approved</li>
                <li>Client payments are now shown in the client details</li>
                <li>Amounts can now be displayed in a monospace font</li>
                <li>The update check was improved and InvoicePlane news will be displayed on the settings page</li>
                <li>Ability to set a custom footer for invoice pdf files with support for HTML and CSS</li>
            </ul>

            <p>Enhancements</p>
            <ul>
                <li>Invoices are sorted by their ID</li>
                <li>InvoicePlane now uses the Noto font</li>
                <li>Assets were updated</li>
                <li>URL keys are now 15 characters long (before: 32)</li>
            </ul>

            <p>Bugs</p>
            <ul>
                <li>Sidebar width and height fixed</li>
                <li>Fixed responsive tables on mobile devices</li>
                <li>Fix for wrong working cancel button</li>
                <li>Various language fixes</li>
                <li>Various other small UI and design fixes</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v112">
            v1.1.2 <span class="released">released 01/27/2015</span>
        </div>
        <div id="v112" class="panel-body collapse">
            <p>Enhancements</p>
            <ul>
                <li>jQuery, Bootstrap, Modernizer were updated</li>
                <li>Invoices are now sorted by their ID</li>
                <li>Settings page tabs are now displayed on top of the page</li>
                <li>UI improvements for invoice and quote tables</li>
                <li>Updatechecks will now use https</li>
                <li>Empty custom fields are now removed from the client details</li>
                <li>Sidebar with fixed height and UI</li>
                <li>Favicon added</li>
                <li>Amounts are now displayed correctly</li>
                <li>Other various smaller UI improvements</li>
            </ul>

            <p>Bugs</p>
            <ul>
                <li>Fixed cancel send email button</li>
                <li>Fixed timezone errors</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v111">
            v1.1.1 <span class="released">released 12/21/2014</span>
        </div>
        <div id="v111" class="panel-body collapse">
            <p>Enhancements</p>
            <ul>
                <li>Some smaller UI changes</li>
                <li>Set default value for type of template</li>
            </ul>

            <p>Bugs</p>
            <ul>
                <li>Fixed wrong VAT and tax ID in quote templates</li>
                <li>Fixed problems with PHP short tags</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v110">
            v1.1.0 <span class="released">released 11/09/2014</span>
        </div>
        <div id="v110" class="panel-body collapse">
            <p>New Features</p>
            <ul>
                <li>Check for new updates added to the system settings</li>
                <li>You can set a default subject for email templates now</li>
                <li>VAT ID / tax code functionality added</li>
                <li>Password reset from login screen</li>
                <li>IP will remember your login for a longer time now</li>
                <li>Custom.css added for your own styles</li>
            </ul>

            <p>Enhancements</p>
            <ul>
                <li>Invoice / quote amounts can now be higher (eg. 1.000.000.000)</li>
                <li>.gitignore for better development added</li>
                <li>Dashboard invoice / quote overview layout changed</li>
                <li>PDF engine updated to latest version</li>
                <li>Some smaller UI changes</li>
            </ul>

            <p>Bugs</p>
            <ul>
                <li>Alert messages on login screen fixed</li>
                <li>Layout issues on pdf templates fixed</li>
                <li>Invoice save bug fixed</li>
                <li>Add quote tax button fixed</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v102">
            v1.0.2 <span class="released">released 08/28/2014</span>
        </div>
        <div id="v102" class="panel-body collapse">
            <p>Bugs</p>
            <ul>
                <li>Hotfix release for issues with tax rates and sum in quotes and invoices.</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v101">
            v1.0.1 <span class="released">released 08/23/2014</span>
        </div>
        <div id="v101" class="panel-body collapse">
            <p>General</p>
            <ul>
                <li>Ping question after the setup removed</li>
            </ul>

            <p>Enhancements</p>
            <ul>
                <li>Adjust the alert box margins</li>
                <li>Padding of panels with tables should be removed</li>
                <li>Guest link shows blank page</li>
                <li>Show date picker on Invoice/Quotes page</li>
                <li>Padding of panels with tables should be removed</li>
                <li>Incorrect table row alignment</li>
                <li>Datepicker icon is misaligned</li>
                <li>Fix Datepicker dropdown padding</li>
                <li>Some smaller UI improvements</li>
            </ul>

            <p>Bugs</p>
            <ul>
                <li>Table on the Clients page is not responsive + 'Options' menu is cut off</li>
                <li>Make 'Login Logo' responsive when img is wider than panel</li>
                <li>Function json_errors() from Quotes</li>
                <li>Form error handling not working properly</li>
                <li>SQL errors while adding custom fields</li>
            </ul>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-target="#v102">
            v1.0.0 <span class="released">released 07/12/2014</span>
        </div>
        <div id="v100" class="panel-body collapse">
            <p>Initial version</p>
        </div>
    </div>

</div>

@stop