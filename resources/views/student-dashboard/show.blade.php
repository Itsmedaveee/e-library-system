@extends('layouts.master')
@section('content') 



<!-- end page-header --> 
<div id="content" class="content">
   <!-- begin breadcrumb -->
 
   <!-- end breadcrumb -->
   <!-- begin page-header -->
   <h1 class="page-header">Book <small></small></h1>

<div class="row">

<div class="col-md-12">
   <div class="panel panel-default">
        <div class="panel-heading">Book</div>
            <div class="panel-body">

 <div class="well">
      <div class="media">
        <div class="pull-left" href="#"> 
            <img class="media-object" src="{{ Storage::url($book->upload_photo) }}" style="width: 150px; height: 150px; ">
            <br>
            <br>
               <p>Category : {{ $book->category->title }}</p>
               <p> Publisher: {{ $book->person_published }}</p>
               <p>Date Published: {{ $book->published->toFormattedDateString() }}</p>
        </div>

        <div class="media-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><h2>Title: {{ $book->title }}</h2></td>
                    </tr>
                    <tr>
                        <td>by : {{ $book->author }}</td>
                    </tr>
                    <tr>
                        <td>{{ $book->body }}</td>
                    </tr>
                  
                </tbody>
            </table> 
       </div>  
    </div> 
  </div> 
  <div class="row">
     <div class="form-group">
                 <form method="POST" action="/borrow/{{ $book->id }}">
      
@include('student-dashboard.modal.add-request-borrow-book')
        @csrf
      {{ method_field('PATCH') }}
        <div class="panel-body">
        
   {{--         <div class="form-group">
                <label>Date</label>
                <input type="date" name="borrow_dates" class="form-control">
            </div>  --}}
      
            <div class="form-group">
    {{--            <button type="submit" class="btn btn-primary">Borrow Book</button> --}}
                <button type="button" class="btn btn-sm btn-primary swal-overlay swal-overlay--show-modal"  data-toggle="modal" data-target="#exampleModalCenter" onclick="handleSubmit()">Request  Book</button>
            </div>
        </form>
            </div>
</div>
</div>
</div>
</div>
</div> 
<div class="col-md-6">
   <div class="panel panel-default">
        <div class="panel-heading"></div>
            <div class="panel-body">
                <table class="table table-bordered table-hover" style="margin-bottom: 185px;">
                    <thead>
                        <tr>
                            <th style="text-align: center;" colspan="2">LIBRARY HOURS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Regular Term: </td>
                        </tr>
                        <tr>
                            <td>Monday - Friday </td>
                            <td>7:00 am - 7:30 pm </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">(No Noon-break)</td>
                        </tr>
                        <tr>
                            <td>Summer:</td>
                            <td>8:00 am - 5:00 pm</td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center;"><strong>REQUIREMENTS FOR USING THE COLLECTIONS OF THE LIBRARY</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <ul>
                                    <li>The Borrower's Card are required for borrowing any library materials. </li>
                                    <li>Tampered Library Borrower's Card will be confiscated and the owner will be required to       secure a new copy after he/she had undergone guidance and counseling. </li>
                                    <li>The Borrower who will use the Borrower's Card other than his/her own will be subjected to disciplinary measure. </li>
                                    <li>A student who will allow his/her Borrower's Card to be used by another shall be forfeited his/her privileges after due process.</li>
                                </ul>
                                A lost library card should be reported immediately to the librarian at the circulation desk, so that a replacement will be issued with a charge of P 10.00 (to be paid to the Business Office) as replacement fee.
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


<div class="col-md-6">
   <div class="panel panel-default">
        <div class="panel-heading"></div>
            <div class="panel-body">
                 <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="text-align: center;" colspan="2">LOAN PERIOD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">A.  Non-Fiction 

                               &nbsp; <p> Non-Fiction books may be borrowed for overnight use starting at 2:00 pm and should be returned the following school day before 9:00 am. </p>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">B.  Fiction 
                                <p>Fiction books may be borrowed for one week and renewable for another three days, if the book is not needed or reserved by another user. </p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center;"><strong>FINES AND SUSPENSION</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2">Materials returned late are subject to overdue fines. Saturdays, Sundays, and Holidays are counted in the computation of fines, if the book is due before these days.</td>
                        </tr>
                        <tr>
                                <td>Non-Fiction Books</td>
                                <td>P 1.00 per hour</td>
                            </tr>
                            <tr>
                                <td>Fiction Books</td>
                                <td>a day inclusive of Sundays and holidays P20.00/day if delay is more than 7 calendar days</td>
                            </tr> 
                        </tr>

                        <tr>
                            <td colspan="2">
                                Borrowing privileges of users are suspended if they have outstanding account in the library. No borrowers with either overdue or outstanding accounts in the library will be allowed to borrow, unless all library obligations are settled. 
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:center;"><strong>LOST AND DAMAGED BOOKS</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2">Lost book/s while on loan must be reported immediately to the librarian in charge where the book/s was/were borrowed. Lost, (presumed when unreturned for 30 days or more) or books with missing pages, books shall be replaced by the borrower of the same or later edition of book. If replacement is not possible, the borrower shall pay 150% of the current price of the book, plus binding cost if appropriate, and fines, which shall be computed from the due date up to the day the obligation is settled. The lost or damaged library materials shall be paid or replaced within 30 calendar days after the date of report of loss. The rules in this paragraph are also applicable to lost and damaged non- print materials.</td>
                        </tr>
                    </tbody>
                </table>
 
@push ('scripts')

<script>
function handleSubmit () {
    document.getElementById('form').submit();
}
 
</script>

@endpush

@endsection

