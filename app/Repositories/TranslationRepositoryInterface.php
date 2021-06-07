<?php
/**
 *  app/Repositories/LanguageRepositoryInterface.php
 *
 * Date-Time: 04.06.21
 * Time: 09:54
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;


use App\Http\Requests\Admin\TranslationRequest;

/**
 * Interface LanguageRepositoryInterface
 * @package App\Repositories
 */
interface TranslationRepositoryInterface
{

    /**
     * @param \App\Http\Requests\Admin\TranslationRequest $request
     */
    public function getData(TranslationRequest $request);
}