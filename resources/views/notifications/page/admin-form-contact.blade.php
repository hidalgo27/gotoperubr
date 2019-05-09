@extends('layouts.notifications.inquire')
@section('content')

    <tr>
        <td style="padding:20px 0px 20px 50px">
            <p style="font-size:18px"><b>Mensaje de</b>: {{$name}}</p>
            <p>Mensaje del formulario de contact.</p>
            <center style="background:#f6f6f6; padding:10px;">
                <table>
                    <tbody>
                    <tr>
                        <td style="text-align:left">
                            <p><strong>Email: {{$email}}</strong></p>
                            <p><strong>Phone: {{$phone}}</strong></p>
                            <p><strong>City: {{$city}}</strong></p>
                            <p><strong>About You: {{$about}}</strong></p>
                            <p><strong>Comment: {{$comment}}</strong></p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </td>
    </tr>

@stop