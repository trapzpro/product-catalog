<?php

namespace App\Nova;

use Illuminate\Support\Str;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Http\Requests\NovaRequest;

class ConditionalRequiredAsoc extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\ConditionalRequiredAsoc::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'desc';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'desc',
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
            Text::make('Description','desc'),
            Select::make('Type')->options([
                'MustMatch' => 'MustMatch',
                'NotMatched' => 'NotMatched',
            ])->displayUsingLabels(),
            Boolean::make('required'),
            BelongsTo::make('Attached Asoc','attached_asoc', Asoc::class),
            BelongsTo::make('Required Asoc','required_asoc', Asoc::class),
            BelongsTo::make('Condition Set','condition_set', ConditionSet::class),
            Text::make('Created By')->fillUsing(function ($request, $model, $attribute, $requestAttribute) {
                $model->{$attribute} = Str::title($request->user()->name);
            }),
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
