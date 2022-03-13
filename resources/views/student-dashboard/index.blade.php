@extends('layouts.app')
@section('content') 
<!-- end page-header --> 
   <div class="container">
         <h2>Library</h2>
         <div class="col-md-12">
            <div class="panel panel-default">
            <div class="panel-heading">Library</div>
            <div class="panel-body">
        {{--     <form method="GET" action="/faculty/home">
               <div class="form-group">
                  <label>Search</label>
                  <input type="text" name="search" class="form-control">
               </div>
               <div class="form-group">
                  <button type="submit" class="btn btn-primary">Search</button>
               </div>
            </form> --}}

            <table class="table table-bordered table-hover" id="myTable">
               <thead>
                  <tr>
                     <th>ID</th>
                     <th>Category</th>
                     <th>Options</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($categories as $category)
                  <tr>
                     <td>{{ $category->id }}</td>
                     <td>{{ $category->title }}</td>
                     <td><a href="/categories/{{ $category->id }}/show" class="btn btn-primary btn-xs">Show Books</a></td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </div>
{{--    <div class="col-md-12">
      <div class="panel panel-inverse">
         <div class="panel-heading">
            <div class="panel-heading-btn">
               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
               <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
            </div>
         </div>
        @foreach ($books as $book)
         <div class="panel-body">
            <div class="col-lg-9">
               <div class="news">
                  <div class="row align-items-center">
                     <div class="col-sm-5 mb-3 mb-sm-0">
                        <div class="news-media mb-0">
                           <div class="news-media-img news-media-img-lg" ><img src="{{ Storage::url($book->upload_photo) }}" style="max-width: 100%; height: auto;"></div>
                        </div>
                     </div>
                     <div class="col-sm-7">
                        <div class="news-content">
                           <div class="news-title mb-2"><h1>{{ $book->title }}</h1></div>
                           <div class="mb-4 fw-bold text-gray-600">
                              {{ $book->body }}
                           </div>
                           <div class="news-date text-gray-400">Author: {{ $book->author }}</div>
                        </div>
                            <div class="news-date text-gray-400">{{ $book->created_at->toFormattedDateString() }}</div>
                            <br>
                             <a href="/books/{{ $book->id }}/download" class="btn btn-primary"><i class="fa fa-download"></i> Download</a>
                             <a href="/books/{{ $book->id }}/download" class="btn btn-warning"><i class="fa fa-download"></i> View</a>
                            </div>
                            </div>
                     </div>
                  </div>
               </div>
            @endforeach
           </div>

        </div> --}}

             {{--   <div class="news">
                  <div class="row align-items-center">
                     <div class="col-sm-5 mb-3 mb-sm-0">
                        <div class="news-media mb-0">
                           <div class="news-media-img news-media-img-lg" style="background-image:url(../assets/img/corporate/img-15.jpg);"></div>
                        </div>
                     </div>
                     <div class="col-sm-7">
                        <div class="news-content">
                           <div class="news-label"><span class="bg-aqua-200 text-aqua-800">Twitter</span></div>
                           <div class="news-title mb-2">Advancing our efforts to make Twitter a safer place for advertisers</div>
                           <div class="mb-4 fw-bold text-gray-600">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet massa est. Vestibulum interdum orci non elit ultricies scelerisque. Ut in neque nibh.
                              Nam non gravida diam.
                           </div>
                           <div class="news-date text-gray-400">May 27, 2021</div>
                        </div>
                        <a href="news_detail.html" class="stretched-link"></a>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@push ('scripts')
<script type="text/javascript">
   $(document).ready( function () {
       $('#myTable').DataTable();
   });
</script>

@endpush