<form action="{{ route('admin.finance.payments.destroy', $payment->id) }}" method="POST" enctype="multipart/form-data">
    @method('DELETE')
    @csrf
        
    <div class="modal-body">        
		<p>{{ __('Do you want to delete this payment, ID: ') }} <span class="font-weight-bold">{{ $payment->order_id }}</span>?</p>     
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-cancel mr-2" data-dismiss="modal">{{ __('Cancel') }}</button>
        <button type="submit" class="btn btn-confirm">{{ __('Confirm') }}</button>
    </div>
</form>