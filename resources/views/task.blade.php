@extends('layouts.layout')

@section('title', 'Progress - tasks')

@section('header')
    @parent
    <link rel="stylesheet" href="{{ asset('css/goal.css') }}">
@endsection

@section('content')
    <section class="content">
        <nav>
            <div>
                <a href="{{ route('home') }}">Home</a>
            </div>
            <div>
                <a href="{{ route('task') }}" id="active">Tasks</a>
            </div>
            <div>
                <a href="{{ route('goal') }}">Goals</a>
            </div>
            <div>
                <a href="{{ route('achievement') }}">Achievements</a>
            </div>
            <div id="login">
                <a href="{{ route('login') }}">Log in</a>
            </div>
        </nav>
        <div id="goal">
            <div id="content">
                <ul>
                    <li>Drink coffee <span class="text-muted">26 dec</span></li>
                    <li>Mentor (course component) <span class="text-muted">27 dec</span></li>
                    <li>AG laboratoare <span class="text-muted">2 jan</span></li>
                    <li>BZ laboratoare <span class="text-muted">2 jan</span></li>
                    <li>Drink coffee <span class="text-muted">26 dec</span></li>
                </ul>
                <div id="form">
                    <form>
                        <div>
                            <input type="text" name="task" placeholder="Write a task...">
                        </div>
                        <div>
                            <input type="datetime-local" name="end_date">
                        </div>
                        <div id="radio">
                            <label for="private-radio" id="private">Private</label>
                            <input type="radio" id="private-radio" name="visibility" value="private">

                            <label for="public-radio" id="public">Public</label>
                            <input type="radio" id="public-radio" name="visibility" value="public">
                        </div>
                        <button type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
