@extends('layouts.studentapp')

@section('title', 'SQL Lessons')

@section('content')

<div class="col-sm-8 col-md-9 col-lg-10 justify-content-start content" id="studContent">
  <div class="container-fluid contentMargin">
    <br />
    <p class="h2" style="font-family:Segoe UI Light; font-weight:lighter;">
      <span class="oi oi-book text-blue" title="Simulator" aria-hidden="true"></span> Chapter 2: Creating Tables
    </p>
    <p class="h5 text-Justify" style="font-family:Segoe UI Light; font-weight:lighter;">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now that you are introduced to some basic topics in SQL such as relationships, primary key, E-R Diagram, etc. In this chapter, you will learn how to build a simple database.
      <br />
      <br />
      We will now go over into primarily creating a table and building its structure. These include the following:
      <ul>
        <li>
          CREATE TABLE command itself
        </li>
        <li>
          The many different data types and the NULL for the columns
        </li>
        <li>
          Describing a table
        </li>
        <li>
          Adding a new row into a table using the INSERT command
        </li>
        <li>
          And finally viewing and deleting data with the use of the SELECT and DELETE command respectively.
        </li>
      </ul>
    </p>
  </div>
</div>

@endsection
