<div class="ticket-header">

        <div class="ticket-requester">  {{  $ticket->requester }}                      </div>
        <div class="ticket-title">
            <a href="{{route('tickets.show',$ticket)}}">{{  str_limit($ticket->title,35)  }}</a>
        </div>
        <div class="ticket-body">       {{  str_limit($ticket->body , 35) }}           </div>
        <div class="ticket-hour">       {{  $ticket->created_at->diffForHumans() }}    </div>
</div>