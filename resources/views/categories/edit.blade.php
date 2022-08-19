<!-- Modal -->
<div class="modal fade" id="edit{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل بيانات التصنيف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('categories.update', 'test') }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $category->id }}">

                    <div class="col">
                        <label for="exampleInputPassword1">اسم التصنيف</label>
                        <input type="text" name="name" value="{{ $category->name }}" class="form-control">
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