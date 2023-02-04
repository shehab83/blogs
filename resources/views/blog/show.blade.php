 @extends('layouts.app')
 @section('content')
     <div id="blogId">
         <div class="parallax-overlay">
             <div class="container pageTitle">
                 <div class="row">
                     <div class="col-md-6 col-sm-6">
                         <h2 class="page-title">Blog Single</h2>
                     </div> <!-- /.col-md-6 -->
                     <div class="col-md-6 col-sm-6 text-right">
                         <span class="page-location">Blog / Blog Single</span>
                     </div> <!-- /.col-md-6 -->
                 </div> <!-- /.row -->
             </div> <!-- /.container -->
         </div> <!-- /.parallax-overlay -->
     </div> <!-- /.pageTitle -->


     <div class="container">
         <div class="row">

             <div class="col-md-8 blog-posts">
                 <div class="row">
                     <div class="col-md-12">
                         <div class="post-blog">
                             <div class="blog-image">
                                 <img src="/image_path/{{ $post->image_path }}" method="POST" alt="">
                             </div> <!-- /.blog-image -->
                             <div class="blog-content">
                                 <span class="meta-date">{{ date('d-m-Y', strtotime($post->updated_at)) }}</span>
                                 <span class="meta-author">{{ $post->user->name }}</span>
                                 <h3>{{ $post->title }}</h3>

                                 <blockquote>
                                     {{ $post->description }}
                                 </blockquote>

                             </div> <!-- /.blog-content -->
                             @if (Auth::user() && Auth::user()->id == $post->user_id)
                                 <a class="main-button accent-color" href="/blog/{{ $post->slug }}/edit">Edit Post</a>

                                 <form action="/blog/{{ $post->slug }}" method="POST" class="btn-group">
                                     @csrf
                                     @method('delete')
                                     <button id="do_add_item_cardd" type="submit"
                                         style="font-size: .875rem;padding: 7px 25px 8px 25px;    border-radius: 4px; color:rgb(245, 245, 245)"
                                         class="btn btn-danger btn-sm"> Delete</button>
                                 </form>
                             @endif
                         </div> <!-- /.post-blog -->

                     </div> <!-- /.col-md-12 -->

                 </div> <!-- /.row -->
                 <div class="row">
                     <div class="col-md-12">
                         <div id="blog-comments" class="blog-post-comments">
                             <h3>{{ $post->approved_comments->count() }} comment(s)</h3>
                             <div class="blog-comments-content">
                                 @forelse ($post->approved_comments as $comment)
                                     <div class="media">
                                         <div class="pull-left">
                                             {{-- <img class="media-object" src="{{ asset('default.jpg')}}" alt=""> --}}
                                         </div>
                                         <div class="media-body">
                                             <div class="media-heading">
                                                 <h4>{{ $comment->name }}</h4>
                                                 <a
                                                     href="#"><span></span><span>{{ $comment->created_at->format('M d Y h:i a') }}</span></a>
                                             </div>

                                             <blockquote>
                                                 {{ $comment->comment }}
                                             </blockquote>

                                         </div>
                                     </div>
                                 @empty
                                     <p>No comments found.</p>
                                 @endforelse
                             </div> <!-- /.blog-comments-content -->
                         </div> <!-- /.blog-post-comments -->
                     </div> <!-- /.col-md-12 -->
                 </div> <!-- /.row -->




                 <div class="row">
                     <div class="col-md-12">
                         <div class="comment-form">
                             <h3>Leave a comment</h3>
                             <div class="widget-inner">
                                 {!! Form::open(['route' => ['blog.add_comment', $post->slug], 'method' => 'post', 'class' => 'comment__form']) !!}
                                 <p>Your email address will not be published.Required fields are marked </p>
                                 <div class="row">
                                     <div class="col-md-4">
                                         <p>
                                             <label for="name-id">Your Name:</label><br>
                                             @error('name')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                             <input type="text" id="name-id" name="name">
                                         </p>
                                     </div>
                                     <div class="col-md-4">
                                         <p>
                                             <label for="email-id">Email Address:</label><br>
                                             @error('email')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                             <input type="text" id="email-id" name="email">
                                         </p>
                                     </div>
                                     <div class="col-md-4">
                                         <p>
                                             <label for="site-id">Your Site:</label><br>
                                             @error('url')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                             <input type="text" id="site-id" name="url">
                                         </p>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-12">
                                         <p>
                                             <label for="comment">Your comment:</label><br>
                                             @error('comment')
                                                 <span class="text-danger">{{ $message }}</span>
                                             @enderror
                                             <textarea name="comment" id="comment" rows="5"></textarea>
                                         </p>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-md-12">
                                         <input class="mainBtn" type="submit" name="submit" value="Submit Comment"
                                             id="submit">
                                     </div>
                                 </div>
                                 {!! Form::close() !!}
                             </div> <!-- /.widget-inner -->
                         </div> <!-- /.widget-main -->
                     </div> <!-- /.col-md-12 -->
                 </div> <!-- /.row -->
                 <div class="col-md-4">
                     <div class="sidebar">
                         <div class="sidebar-widget">
                             <h5 class="widget-title">Text Widget</h5>
                             <p class="light-text">Fusce dapibus, tellus ac cursus commodo, tortor
                                 mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                 Cum sociis natoque penatibus et magnis dis parturient… </p>
                         </div> <!-- /.sidebar-widget -->
                     </div> <!-- /.sidebar -->
                 </div> <!-- /.col-md-4 -->

             </div> <!-- /.row -->
         </div> <!-- /.container -->
     @endsection
