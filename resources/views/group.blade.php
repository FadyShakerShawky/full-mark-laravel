@extends('layouts.general')



@section('main-body')
<main class="container" >

    <form style="margin-top:25vh" action="{{route('group.store')}}" method="post">
    @csrf
        <div class="row justify-content-center ">
        <h2 class="text-center">Create New Group</h2>
            <div class="form-group col-10 " >
                <label for="description">Description</label>
                <textarea class="col-md-12 form-control" name="description" placeholder="Write something.." style="border: 1px solid #6ab04c"></textarea>
            </div>

            <div class="form-group col-10">
                <label for="max_no_student">Max No Student</label>
                <input type="number" style="border: 1px solid #6ab04c" class="form-control" name="max_no_student" placeholder="Max No Student" min="5">
            </div>

            <div class="form-group col-10">
                <label for="start_date">Start Date</label>
                    <input class="form-control" style="border: 1px solid #6ab04c" type="date" name="start_date">
            </div>

            <div class="form-group col-10">
                <label for="end_date">End Date</label>
                    <input class="form-control" style="border: 1px solid #6ab04c" type="date" name="end_date">
            </div>

            <div class="form-group col-10">
                <label for="start_time">Start Time</label>
                    <input class="form-control" style="border: 1px solid #6ab04c" type="time" name="start_time">
            </div>

            <div class="form-group col-10">
                <label for="end_time">End Time</label>
                    <input class="form-control" style="border: 1px solid #6ab04c" type="time" name="end_time">
            </div>

            <div class="form-group col-10">
                <label for="no_lec">Number of Lectures</label>
                <input type="number" style="border: 1px solid #6ab04c" class="form-control" name="no_lec" placeholder="Number of Lectures" min="5">
            </div>

            <div class="form-group col-10">
                <label for="price">Price</label>
                <input type="number" style="border: 1px solid #6ab04c" class="form-control" name="price" placeholder="Price" min="10">
            </div>

            <div class="form-group col-10">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>

    </form>
</main>
@endsection
