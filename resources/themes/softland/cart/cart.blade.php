@extends('theme::layouts.index')

@section('tittle')
    Your
@endsection

@section('content')

<div class="site-section">
   <div class="container">
    <div class="row justify-content-center text-center">
      <div class="h1">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">{{Cart::getTotalQuantity()}}</span>
      </div>
      <table class="table table-bordered">
           <thead class="table-primary">
               <tr>
                   <th>Product</th>
                   <th>Qty</th>
                   <th>Price</th>
                   <th>Action</th>
                   <th>Subtotal</th>
               </tr>
           </thead>
      
           <tbody>
      
             <?php foreach(Cart::getContent() as $row) :?>
      
                 <tr>
                     <td>
                         <p><strong><?php echo $row->name; ?></strong></p>
                     </td>
                     <td><?php echo $row->quantity; ?></td>
                     <td>$<?php echo $row->price; ?></td>
                       <td>
                          <form method="POST" action="{{ route('cart.destroy', $row->id) }}">
                            @csrf
                            @method('delete')
                          <div class="input-group">
                              <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                          </div>
                        </form>
                       </td>
                     <td>$<?php echo $row->total; ?></td>
                 </tr>
      
             <?php endforeach;?>
      
           </tbody>
           
           <tfoot>
             <tr>
               <td colspan="2">&nbsp;</td>
               <td>Subtotal</td>
               <td><?php echo Cart::getSubTotal(); ?></td>
             </tr>
             <tr>
               <td colspan="2">&nbsp;</td>
               <td>Tax</td>
             </tr>
             <tr>
               <td colspan="2">&nbsp;</td>
               <td>Total</td>
               <td><?php echo Cart::getTotal(); ?></td>
             </tr>
           </tfoot>
      </table>
      <a class="btn btn-primary" href="{{ route('checkout.index') }}" role="button">Proced Checkout</a>
    </div>



   </div>
</div>

@endsection

