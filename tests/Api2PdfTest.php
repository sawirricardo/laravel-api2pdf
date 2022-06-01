<?php

it('can test', function () {
    expect(api2pdf()->client())
        ->toBeInstanceOf(\Api2Pdf\Api2Pdf::class);
});
