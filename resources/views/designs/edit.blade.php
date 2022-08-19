<!-- Modal -->
<div class="modal fade" id="edit{{ $design->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات دسان</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('designs.update', 'test') }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                {{-- @csrf --}}
                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $design->id }}">

                    <div class="col">
                        <label for="exampleInputPassword1">اسم الدسان</label>
                        <input type="text" name="name" value="{{ $design->name }}" class="form-control">
                    </div>
                    <br>

                    
                    <div class="col">
                        <label>اسم التصنيف:</label>
                        <select name="category_id" class="form-control SlectBox">
                            @foreach ($categories as $name => $id)
                                <option value="{{ $id }}" {{ $id == $design->design_id ? 'selected':"" }}> {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                    <button type="submit" class="btn btn-primary">تعديل</button>
                </div>
            </form>
        </div>
    </div>
</div>