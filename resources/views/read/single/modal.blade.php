
<!-- modal -->
<div class="remodal" data-remodal-id="modal"
     data-remodal-options="hashTracking: false, closeOnOutsideClick: false">

    <button data-remodal-action="close" class="remodal-close"></button>
    <h3 class="mb-3">ویرایش</h3>

    <form action="{{route('updateDoc')}}" method="post">
        {{csrf_field()}}
        <input  type="hidden" id="edit_id" name="id">

        <div class="text-right">
            <div class="form-group">
                <label>
                    عنوان سند
                </label>
                <input    class="form-control" type="text" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label>
                    شماره سند
                </label>
                <input class="form-control" type="number" id="number" name="number">
            </div>
            <div class="form-group">
                <label>
                    تاریخ سند
                </label>
                <input class="form-control" type="text" id="docdate" name="date">
            </div>
            <div class="form-group">
                <label>
                    مرجع صادر کننده
                </label>
                <input class="form-control" type="text" id="exporterReference" name="exporterReference">
            </div>
            <div class="form-group">
                <label>
                    تعداد برگ
                </label>
                <input class="form-control" type="text" id="pageCount" name="pageCount">
            </div>
        </div>

        <div class="btn-container">
            <input type="submit" class="btn btn-primary btn-block"   value="تایید">
        </div>
    </form>
</div>
