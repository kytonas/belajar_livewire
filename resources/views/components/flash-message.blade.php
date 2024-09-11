 @if(flash()->message)
        <div class="alert alert-info" role="alert"> <!-- You can change 'info' based on the message type -->
            {{ flash()->message }}
        </div>
    @endif