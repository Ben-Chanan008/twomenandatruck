@if (session('showPopup'))
    <div class="alerts"></div>
    <script>
        const msg = new Msg('.alerts');
        msg.popup({
            type: '{{ session('showPopup.type') ?? 'error' }}',
            msg: '{{ session('showPopup.message') ?? session('showPopup') }}'
        });
    </script>
@endif