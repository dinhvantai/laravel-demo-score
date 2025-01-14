<?php

namespace Database\Seeders;

use App\Models\Competition;
use App\Models\Country;
use App\Models\MatchInfo;
use App\Models\Team;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $time = Carbon::now()->timestamp / (15 * 60);

        $matchTime = (((int)$time) * 15 - 60) * 60;

        $algeria = Country::query()->updateOrCreate(
            ['name' => 'Algeria'],
            ['logo' => 'https://www.worldometers.info/img/flags/ag-flag.gif'],
        );

        $algeriaWomenCompetition = Competition::query()->updateOrCreate(
            ['name' => 'Giải bóng đá nữ Algeria'],
            ['logo' => 'https://www.worldometers.info/img/flags/ag-flag.gif'],
        );

        $teamAkbouW = Team::query()->updateOrCreate(
            ['name' => 'CLB nữ Akbou', 'country_id' => $algeria->id, 'competition_id' => $algeriaWomenCompetition->id],
            ['logo' => 'https://img0.aiscore.com/football/team/489abd8293f0e1d1770bf1d152414d0a.png!w100'],
        );
        $teamAfakRelizaneW = Team::query()->updateOrCreate(
            ['name' => 'Afak Relizane (w)', 'country_id' => $algeria->id, 'competition_id' => $algeriaWomenCompetition->id],
            ['logo' => 'https://img0.aiscore.com/football/team/d97c8977e90645659aa83afa3ba953da.png!w100'],
        );
        $matchAkbouWAndAfakRelizaneW = MatchInfo::query()->updateOrCreate(
            ['home_team_id' => $teamAkbouW->id, 'away_team_id' => $teamAfakRelizaneW->id, 'competition_id' => $algeriaWomenCompetition->id],
            [
                'status_id' => MatchInfo::STATUS_SECOND_HALF,
                'match_time' => $matchTime - 15 * 60,
                'home_scores' => [1, 1, 0, 0, 1, 0, 0],
                'away_scores' => [0, 0, 0, 0, 0, 0, 0],
            ],
        );

        $teamKhroubW = Team::query()->updateOrCreate(
            ['name' => 'CLB nữ Jf Khroub', 'country_id' => $algeria->id, 'competition_id' => $algeriaWomenCompetition->id],
            ['logo' => 'https://img0.aiscore.com/football/team/7a73420ef28cae35c9766cfec4921715.png!w100'],
        );
        $teamAlgerCentreW = Team::query()->updateOrCreate(
            ['name' => 'ASE Alger Centre (w)', 'country_id' => $algeria->id, 'competition_id' => $algeriaWomenCompetition->id],
            ['logo' => 'https://img0.aiscore.com/football/team/cfb3bea33c4b6972fcbd77badd5e1ead.png!w100'],
        );
        $matchKhroubWAndAlgerCentreW = MatchInfo::query()->updateOrCreate(
            ['home_team_id' => $teamKhroubW->id, 'away_team_id' => $teamAlgerCentreW->id, 'competition_id' => $algeriaWomenCompetition->id],
            [
                'status_id' => MatchInfo::STATUS_SECOND_HALF,
                'match_time' => $matchTime,
                'home_scores' => [2, 2, 0, 0, 0, 0, 0],
                'away_scores' => [0, 0, 0, 0, 1, 0, 0],
            ],
        );

        $algeriaU21Competition = Competition::query()->updateOrCreate(
            ['name' => 'Liga U21 Youth Algeria'],
            ['logo' => 'https://www.worldometers.info/img/flags/ag-flag.gif'],
        );
        $teamSaouraU21 = Team::query()->updateOrCreate(
            ['name' => 'Saoura U21', 'country_id' => $algeria->id, 'competition_id' => $algeriaU21Competition->id],
            ['logo' => 'https://img0.aiscore.com/football/team/396303e00be8525298ca51340529f44c.png!w100'],
        );
        $teamKabylieU21 = Team::query()->updateOrCreate(
            ['name' => 'Kabylie U21', 'country_id' => $algeria->id, 'competition_id' => $algeriaU21Competition->id],
            ['logo' => 'https://img0.aiscore.com/football/team/c9c333e1db441e77093e45dec62588fe.png!w100'],
        );
        $matchKhroubWAndAlgerCentreW = MatchInfo::query()->updateOrCreate(
            ['home_team_id' => $teamSaouraU21->id, 'away_team_id' => $teamKabylieU21->id, 'competition_id' => $algeriaU21Competition->id],
            [
                'status_id' => MatchInfo::STATUS_SECOND_HALF,
                'match_time' => $matchTime + 10 * 60,
                'home_scores' => [0, 0, 0, 0, 6, 0, 0],
                'away_scores' => [4, 2, 0, 0, 6, 0, 0],
            ],
        );


        $india = Country::query()->updateOrCreate(
            ['name' => 'India'],
            ['logo' => 'https://www.worldometers.info/img/flags/in-flag.gif'],
        );

        $indiaCompetition = Competition::query()->updateOrCreate(
            ['name' => 'Siêu cúp Ấn Độ'],
            ['logo' => 'https://www.worldometers.info/img/flags/in-flag.gif'],
        );
        $teamHyderabad = Team::query()->updateOrCreate(
            ['name' => 'Hyderabad', 'country_id' => $india->id, 'competition_id' => $indiaCompetition->id],
            ['logo' => 'https://img0.aiscore.com/football/team/815bd35aaf3d9cfd58a9899695daf03c.png!w100'],
        );
        $teamSreenidiDeccan = Team::query()->updateOrCreate(
            ['name' => 'Sreenidi Deccan', 'country_id' => $india->id, 'competition_id' => $indiaCompetition->id],
            ['logo' => 'https://img0.aiscore.com/football/team/ac0943dbb5e9a5b3efa8fe762e23330e.png!w100'],
        );

        $indiaGroupACompetition = Competition::query()->updateOrCreate(
            ['name' => 'Bảng đấu A'],
            ['logo' => 'https://www.worldometers.info/img/flags/in-flag.gif'],
        );
        $matchKhroubWAndAlgerCentreW = MatchInfo::query()->updateOrCreate(
            ['home_team_id' => $teamHyderabad->id, 'away_team_id' => $teamSreenidiDeccan->id, 'competition_id' => $indiaGroupACompetition->id],
            [
                'status_id' => MatchInfo::STATUS_SECOND_HALF,
                'match_time' => $matchTime + 15 * 60,
                'home_scores' => [1, 0, 0, 0, 2, 0, 0],
                'away_scores' => [4, 4, 0, 0, 3, 0, 0],
            ],
        );


        $bangladesh = Country::query()->updateOrCreate(
            ['name' => 'Bangladesh'],
            ['logo' => 'https://www.worldometers.info/img/flags/bg-flag.gif'],
        );
        $bangladeshCompetition = Competition::query()->updateOrCreate(
            ['name' => 'Giải đấu ngoại hạng Bangladesh'],
            ['logo' => 'https://www.worldometers.info/img/flags/bg-flag.gif'],
        );

        $bangladeshRound4Competition = Competition::query()->updateOrCreate(
            ['name' => 'Vòng 4'],
            ['logo' => 'https://www.worldometers.info/img/flags/bg-flag.gif'],
        );
    }
}
