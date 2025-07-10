@if (session('showPopup'))
    <div class="alerts"></div>
    <script>
        const msg = new Msg('.alerts');
        msg.popup({
            type: 'error',
            msg: '{{ session('showPopup') }}'
        });
    </script>
@endif