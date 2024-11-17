<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

<<<<<<< HEAD
class ParsePostRequestFields {
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response) $next
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function handle(Request $request, Closure $next) {
        if ($request->isMethod('post')) {
            $excludedFields = ['_token', 'password', 'email', 'description', 'text', 'criteria'];
=======
class ParsePostRequestFields
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next) {
        if ($request->isMethod('post')) {
            $excludedFields = ['_token', 'password', 'email', 'description', 'text'];
>>>>>>> 40004c366c26637c703cd497a00681348f4783a9
            $strippedFields = ['name', 'title'];

            $parsedFields = [];
            foreach ($request->except($excludedFields) as $key => $value) {
                if (is_array($value)) {
                    $parsedFields[$key] = $this->parseArray($value, $strippedFields);
                } else {
                    if (is_numeric($value)) {
                        continue;
                    }

                    if (in_array($key, $strippedFields)) { // we strip these since parse() doesn't remove HTML tags
                        $parsedFields[$key] = parse(strip_tags($value));
                    } else {
                        $parsedFields[$key] = parse($value);
                    }
                }
            }

            $request->merge($parsedFields);
        }

        return $next($request);
    }

    /**
     * Recursively parse array values.
<<<<<<< HEAD
     */
    private function parseArray(array $array, array $strippedFields): array {
=======
     *
     * @param  array  $array
     * @param  array  $strippedFields
     * @return array
     */
    private function parseArray(array $array, array $strippedFields) : array {
>>>>>>> 40004c366c26637c703cd497a00681348f4783a9
        foreach ($array as $key => $value) {
            if (is_numeric($value)) {
                continue;
            }

            if (is_array($value)) {
                $array[$key] = $this->parseArray($value, $strippedFields);
            } else {
                if (in_array($key, $strippedFields)) {
                    $array[$key] = parse(strip_tags($value));
                } else {
                    $array[$key] = parse($value);
                }
            }
        }

        return $array;
    }
}
