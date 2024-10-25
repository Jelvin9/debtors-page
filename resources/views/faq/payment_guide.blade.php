<h2 class="text-4xl font-bold mb-5 ml-6 text-white">The Collection Process</h2>

<div class="flex flex-col space-y-4">
    {{-- Step 1 --}}
    @component('components.payment-step', ['stepNumber' => 1, 'description' => 'Notification of Debt', 'note' => 'We will notify the outstanding amount through message/email/phone to you.', 'last' => false])
    @endcomponent

    {{-- Step 2 --}}
    @component('components.payment-step', ['stepNumber' => 2, 'description' => 'Validation and Verification', 'note' => 'You can request validation of its legitimacy, we will provide detailed documentation of the original debt and verify the total balance including any fees or interest.', 'last' => false])
    @endcomponent

    {{-- Step 3 --}}
    @component('components.payment-step', ['stepNumber' => 3, 'description' => 'Dispute Resolution (If applicable)', 'note' => 'If you think the debt is inaccurate, you can request to dispute. We will hold the debt and investigate your claim.', 'last' => false])
    @endcomponent

    {{-- Step 4 --}}
    @component('components.payment-step', ['stepNumber' => 4, 'description' => 'Pay Now Or Make a Scheduled Payment.', 'note' => 'Full payment: Pay at once and close account / Installment payments: set up a schdule that works for you / Settlement: to pay a partial amount time to time', 'last' => false])
    @endcomponent

    {{-- Step 5 --}}
    @component('components.payment-step', ['stepNumber' => 5, 'description' => 'Agreement', 'note' => 'Make payment(s) to what you have agree on, fail to meet agreements may result in legal proceedings or additional fees.', 'last' => false])
    @endcomponent

    {{-- Step 6 - Last Step --}}
    @component('components.payment-step', ['stepNumber' => 6, 'description' => 'Confirmation', 'note' => 'Once the debt has been paid off, we will send you a confirmation of payment.', 'last' => true])
    @endcomponent

</div>
<div class="bg-neutral-200 p-6 rounded-lg mt-8">
    <h2 class="text-3xl font-bold mb-4 text-gray-800">Ongoing Support</h2>
    <p class="text-neutral-700 mb-4">
        If you face further financial difficulties or have any questions about your debt, feel free to contact us. We are here to support you:
    </p>

    <ul class="list-disc list-inside text-neutral-600 space-y-2 mb-4">
        <li>You can ask for guidance on financial management</li>
        <li>We can discuss alternative solutions if necessary</li>
    </ul>

    <p class="text-neutral-700">
        Our goal is to help you resolve the debt in a way that is both fair and manageable, ensuring your financial well-being remains a priority.
    </p>
</div>
