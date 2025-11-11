<h2 style="color: #2c3e50; font-family: Arial, sans-serif;">📩 New Contact Message</h2>

<table style="font-family: Arial, sans-serif; font-size: 14px; border-collapse: collapse; width: 100%;">
    <tr>
        <td style="padding: 8px; font-weight: bold;">Name:</td>
        <td style="padding: 8px;">{{ $fullname }}</td>
    </tr>
    <tr>
        <td style="padding: 8px; font-weight: bold;">Email:</td>
        <td style="padding: 8px;">{{ $email }}</td>
    </tr>
    <tr>
        <td style="padding: 8px; font-weight: bold;">Phone:</td>
        <td style="padding: 8px;">{{ $phone }}</td>
    </tr>
    <tr>
        <td style="padding: 8px; font-weight: bold;">Subject:</td>
        <td style="padding: 8px;">{{ $subject }}</td>
    </tr>
</table>

<hr style="margin: 20px 0;">

<h3 style="font-family: Arial, sans-serif;">Message:</h3>
<p style="font-family: Arial, sans-serif; font-size: 14px; line-height: 1.5;">{{ $messageBody }}</p>

