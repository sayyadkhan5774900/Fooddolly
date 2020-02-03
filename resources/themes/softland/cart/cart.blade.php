@extends('theme::layouts.index')

@section('tittle')
    Your
@endsection

@section('content')

<div class="site-section">
   <div class="container">
    <div class="row justify-content-center text-center">
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
      
             <?php foreach(Cart::content() as $row) :?>
      
                 <tr>
                     <td>
                         <p><strong><?php echo $row->name; ?></strong></p>
                         <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                     </td>
                     <td><?php echo $row->qty; ?></td>
                     <td>$<?php echo $row->price; ?></td>
                       <td>
                          <form method="POST" action="{{ route('cart.destroy', $row->rowId) }}">
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
               <td><?php echo Cart::subtotal(); ?></td>
             </tr>
             <tr>
               <td colspan="2">&nbsp;</td>
               <td>Tax</td>
               <td><?php echo Cart::tax(); ?></td>
             </tr>
             <tr>
               <td colspan="2">&nbsp;</td>
               <td>Total</td>
               <td><?php echo Cart::total(); ?></td>
             </tr>
           </tfoot>
      </table>
    </div>
   </div>
</div>

@endsection

