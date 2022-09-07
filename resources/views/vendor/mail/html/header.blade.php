<tr>
    <td style="padding: 20px 0; text-align: center">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                {{--                <img src="https://laravel.com/img/notification-logo.png" width="200" height="50" alt="alt_text"--}}
                {{--                     border="0"--}}
                {{--                     style="height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 15px; color: #555555;">--}}
                {{ $slot }}
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
