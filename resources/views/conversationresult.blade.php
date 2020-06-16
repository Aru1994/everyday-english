@extends('layouts.app')

@section('content')
<div class="conversation">会話型式問題</div>
<div class="col-10 ml-3">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>1.</td>
                <td>I know, but <div class="space"></div></td>
                <td>○</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>I know, but <div class="space"></div></td>
                <td>○</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>I know, but <div class="space"></div></td>
                <td>○</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>I know, but <div class="space"></div></td>
                <td>×</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>I know, but <div class="space"></div></td>
                <td>×</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>I know, but <div class="space"></div></td>
                <td>○</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>I know, but <div class="space"></div></td>
                <td>○</td>
            </tr>
            <tr>
                <td>8.</td>
                <td>I know, but <div class="space"></div></td>
                <td>×</td>
            </tr>
            <tr>
                <td>9.</td>
                <td>I know, but <div class="space"></div></td>
                <td>○</td>
            </tr>
            <tr>
                <td>10.</td>
                <td>I know, but <div class="space"></div></td>
                <td>○</td>
            </tr>
        </tbody>
    </table>
</div>
<footer>
      <p>&copy Aru's Portfolio</p>
      <ul>
        <li><img class="facebooklogo" src="{{ asset('images/facebooklogo.png') }}" alt="facebook"></li>
        <li><img class="instagramlogo" src="{{ asset('images/instagram.png') }}" alt="instagram"></li>
      </ul>

 </footer>
 @endsection
