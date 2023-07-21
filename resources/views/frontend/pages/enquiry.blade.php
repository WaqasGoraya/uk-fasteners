   @extends('frontend.app')
   @section('main_content')
   <!-- Contact Start -->
   <section class="quote">
       <div class="container">
           <div class="row align-items-center quote-row">
               <div class="col-lg-6 px-0">
                   <img src="assets/images/quote-img.jpg" alt="quote image" class="img-fluid">
               </div>
               <div class="col-lg-6 py-70 py-lg-0 px-lg-60">
                   <h2 class="quote-title">request a free quote</h2>
                   <form>
                       <div class="mb-3">
                           <input type="text" class="form-control" placeholder="Transport Type*" required>
                       </div>
                       <div class="mb-3">
                           <input type="email" class="form-control" placeholder="Email*" required>
                       </div>
                       <div class="row mb-3">
                           <div class="col">
                               <input type="text" class="form-control" placeholder="City of Departure*" required>
                           </div>
                           <div class="col">
                               <input type="text" class="form-control" placeholder="Delivery City*" required>
                           </div>
                       </div>
                       <div class="mb-3">
                           <input type="number" class="form-control" placeholder="Total Weight (in KGS)*" required>
                       </div>
                       <div class="mb-5">
                           <input type="date" class="form-control" placeholder="Time">
                       </div>
                       <button type="submit" class="btn btn-submit">get pricing</button>
                   </form>
               </div>
           </div>
       </div>
   </section>
   <!-- Contact End -->
   @endsection