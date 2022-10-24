<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MyBusinness\Application\UseCases\Bill\Create\CreateNewBillUseCase;
use MyBusinness\Application\UseCases\Bill\Create\DTO\BillCreateInputDTO;
use MyBusinness\Infra\Repository\Bill\EloquentRepository;

class BillsController extends Controller
{
    public function store(Request $request)
    {
        $input = new BillCreateInputDTO($request->integer('amount'), $request->string('type'));
        $repository = app(EloquentRepository::class);

        $useCase = new CreateNewBillUseCase($input, $repository);

        return $useCase->handle();
    }
}
