<!-- Delete Confirmation Modal -->
<div id="confirm-delete-modal" class="modal-overlay">
    <div class="modal-content" style="width: 500px;">
        <span class="close-button" onclick="this.closest('.modal-overlay').style.display='none'">&times;</span>
        <div class="modal-header">XÁC NHẬN XÓA SẢN PHẨM</div>
        <div style="display: flex; align-items: center; gap: 15px; margin: 25px 0;">
            <svg style="width: 48px; height: 48px; color: #555; flex-shrink: 0;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <div style="text-align: left;">
                <p style="font-weight: 500; color: #333; margin: 0;">Bạn có chắc chắn muốn xóa sản phẩm này không?</p>
                <p style="font-size: 14px; color: #666; margin: 4px 0 0 0;">Sản phẩm sẽ bị xóa khỏi danh mục.</p>
            </div>
        </div>
        <div class="modal-footer" style="justify-content: flex-end;">
            <button type="button" id="cancel-delete-btn" class="btn-cancel">Hủy bỏ</button>
            <form id="delete-form" action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-submit">Xóa</button>
            </form>
        </div>
    </div>
</div> 