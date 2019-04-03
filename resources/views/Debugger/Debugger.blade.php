<script src="{{ asset('js/debugBar.js') }}" defer></script>

<div class="fixed-bottom">
    <button class="btn btn-primary m-1" onclick="closeOpenDebugBar()">Toggle debug bar</button>
    <div id="debugger_bar" style="display:none">
    {{ dd(get_defined_vars()) }} </div>
</div>