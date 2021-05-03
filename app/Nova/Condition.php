<?php

namespace App\Nova;

use Illuminate\Support\Str;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Http\Requests\NovaRequest;

class Condition extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Condition::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'type','value'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),
            //Text::make('Type')->sortable(),
            Select::make('Type')->options([
                'constraint:productTypeId' => 'productTypeId',
                'constraint:levelId' => 'levelId',
                'constraint:productProfileId' => 'productProfileId',
                'constraint:packageTypeId' => 'packageTypeId',
                'constraint:marketId' => 'marketId',
                'constraint:channelId' => 'channelId',
                'constraint:bbTechId' => 'bbTechId',
                'constraint:customerTypeId' => 'customerTypeId',
                'constraint:offerId' => 'offerId',
                'constraint:speedId' => 'speedId',
                'constraint:installTypeId' => 'installTypeId',
                'constraint:customerSegmentId' => 'customerSegmentId',
                'constraint:customerTypeId' => 'customerTypeId',
                'constraint:tvPackageId' => 'tvPackageId',
                'constraint:chipsetId' => 'chipsetId',
            ])->displayUsingLabels(),

            Select::make('Operator')->options([
                'equals' => 'Equals',
            ])->displayUsingLabels(),

            Text::make('Value')->sortable(),
            Text::make('Created By')->fillUsing(function ($request, $model, $attribute, $requestAttribute) {
                $model->{$attribute} = Str::title($request->user()->name);
            }),
            BelongsToMany::make('Condition Sets'),
            
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
