<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            ['question' => 'What is your gender identity ?' , 'category_id' => 1],
            ['question' => 'How old are you ?' , 'category_id' => 1],
            ['question' => 'How do you identity ? ex.straight/gay ' , 'category_id' => 1],
            ['question' => 'What is your relationship status ?' , 'category_id' => 1],
            ['question' => 'In what religion do you believe / if you believe  ?' , 'category_id' => 1],
            ['question' => 'Have you ever been in therapy before ?' , 'category_id' => 1],
            ['question' => 'What led you to consider therapy today ?' , 'category_id' => 1],
            ['question' => 'What are your expectations from your therapist ? A therapist who… Listen/Challenge me and etc' , 'category_id' => 1],
            ['question' => 'How would you rate your current physical health ?' , 'category_id' => 1],
            ['question' => 'How would you rate your current eating habits ?' , 'category_id' => 1],
            ['question' => 'Are you currently experiencing overwhelming sadness, grief, or depression ?' , 'category_id' => 1],
            ['question' => 'Feeling down, depressed or hopeless ?' , 'category_id' => 1],
            ['question' => 'Trouble falling asleep, staying asleep, or sleeping too much ?' , 'category_id' => 1],
            ['question' => 'Feeling tired or having little energy ?' , 'category_id' => 1],
            ['question' => 'Feeling bad about yourself - or that you are a failure or have let yourself or your family down ?' , 'category_id' => 1],
            ['question' => 'Thoughts that you would be better off dead or of hurting yourself in some way ?' , 'category_id' => 1],
            ['question' => 'Are you currently employed ?' , 'category_id' => 1],
            ['question' => 'How often do you drink alcohol ?' , 'category_id' => 1],
            ['question' => 'When was the last time you thought about suicide ?' , 'category_id' => 1],
            ['question' => 'Are you currently experiencing anxiety, panic attacks or have any phobias ?' , 'category_id' => 1],
            ['question' => 'How would you rate your current financial status ?' , 'category_id' => 1],
            ['question' => 'Which country are you in ?' , 'category_id' => 1],

            //

            ['question' => 'Why do you need therapy as a couple. Ex.. Improve our conversation / relationship problems ?' , 'category_id' => 2],
            ['question' => 'How old are you ?' , 'category_id' => 2],
            ['question' => 'Do you currently live with your partner? ' , 'category_id' => 2],
            ['question' => 'Is domestic violence currently an issue in your relationship?' , 'category_id' => 2],
            ['question' => 'Have you ever been in therapy before ?' , 'category_id' => 2],
            ['question' => 'What are your expectations from your therapist ? A therapist who… Listen/Challenge me and etc' , 'category_id' => 2],
            ['question' => 'How would you rate your current financial status ?' , 'category_id' => 2],
            ['question' => 'Which country are you in ?' , 'category_id' => 2],

            ///
            ['question' => 'What is your child gender ?' , 'category_id' => 3],
            ['question' => 'How are you related to your child ?' , 'category_id' => 3],
            ['question' => 'How old is your child ? ' , 'category_id' => 3],
            ['question' => 'Where does your child live ? Ex.Together, with his father/ mom' , 'category_id' => 3],
            ['question' => 'Does your child go to school ?' , 'category_id' => 3],
            ['question' => 'Has your child ever been in therapy before ?' , 'category_id' => 3],
            ['question' => 'How do you rate your child physical health?' , 'category_id' => 3],
            ['question' => 'Is your child currently experiencing anxiety, panic attacks or have any phobias?' , 'category_id' => 3],
            ['question' => 'Is your child currently experiencing overwhelming sadness, grief or depression?' , 'category_id' => 3],
            ['question' => 'Over the past 2 weeks, how often have you observed that your child has been bothered' , 'category_id' => 3],
            ['question' => 'Having anger outbursts, yelling and screaming or being violent towards others.' , 'category_id' => 3],
            ['question' => 'Trouble concentrating on things, such as having a conversation or watching television.' , 'category_id' => 3],
            ['question' => 'Feeling down, depressed or hopeless.' , 'category_id' => 3],
            ['question' => 'How would you rate your relationship with your child?' , 'category_id' => 3],
            ['question' => 'How would you rate your current financial status?' , 'category_id' => 3],
            ['question' => 'Which country are you in ?' , 'category_id' => 3],
        ];

        foreach ($questions as $question) {
            Question::create([
                'question' => $question['question'],
                'category_id' => $question['category_id'],
            ]);
        }
    }
}
